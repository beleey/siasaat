<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = 'fp';
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            //return $this->goHome();
            return $this->redirect(['mahasiswa/index']);
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['mahasiswa/index']);
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    
    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                $email = \Yii::$app->mailer->compose()
                    ->setTo($user->email)
                    ->setFrom([\Yii::$app->params['supportEmail'] => Yii::t('app', 'SIASAAT Administrator')])
                    ->setSubject(Yii::t('app', 'SIASAAT Signup Confirmation'))
                    ->setHtmlBody(Yii::t('app', 'Silahkan klik link berikut ini untuk konfirmasi: ') . "<br>" . \yii\helpers\Html::a(Yii::t('app', 'Konfirmasi'),
                        Yii::$app->urlManager->createAbsoluteUrl(['site/confirm','id'=>$user->id,'key'=>$user->auth_key])) . "<br><br><p>" . Yii::t('app', 'SIASAAT Administrator') . "</p>")
                    ->send();

                if($email){
                    Yii::$app->getSession()->setFlash('success',Yii::t('app', 'Anda telah berhasil melakukan pendaftaran pengguna. Silahkan Cek Email Anda untuk konfirmasi'));
                } else{
                    Yii::$app->getSession()->setFlash('warning',Yii::t('app', 'Gagal melakukan kontak. Silahkan menghubungi Administrator SIASAAT'));
                }
                //return $this->goHome();
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionConfirm($id, $key)
    {
        $user = \common\models\User::find()->where([
            'id'=>$id,
            'auth_key'=>$key,
            'status'=>0,
        ])->one();
        if(!empty($user)){
            $user->status=10;
            $user->save();
            Yii::$app->getSession()->setFlash('success',Yii::t('app', 'Anda berhasil melakukan konfirmasi. Silahkan melakukan login untuk mengakses aplikasi SIASAAT'));
        } else {
            Yii::$app->getSession()->setFlash('warning',Yii::t('app', 'Anda GAGAL melakukan konfirmasi. Jika Anda sudah pernah melakukan konfirmasi sebelumnya, silahkan mencoba login dengan user dan password yang telah Anda daftarkan.'));
        }
        return $this->redirect('login');
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    // public function actionRequestPasswordReset()
    // {
    //     $model = new PasswordResetRequestForm();
    //     if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    //         if ($model->sendEmail()) {
    //             Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

    //             return $this->goHome();
    //         } else {
    //             Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
    //         }
    //     }

    //     return $this->render('requestPasswordResetToken', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    // public function actionResetPassword($token)
    // {
    //     try {
    //         $model = new ResetPasswordForm($token);
    //     } catch (InvalidParamException $e) {
    //         throw new BadRequestHttpException($e->getMessage());
    //     }

    //     if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
    //         Yii::$app->session->setFlash('success', 'New password was saved.');

    //         return $this->goHome();
    //     }

    //     return $this->render('resetPassword', [
    //         'model' => $model,
    //     ]);
    // }
}
