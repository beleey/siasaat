<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Mahasiswa;
use frontend\models\MahasiswaSearch;
use frontend\models\MahasiswaPendidikan;
use frontend\models\MahasiswaPendidikanSearch;
use frontend\models\MahasiswaPekerjaan;
use frontend\models\MahasiswaPekerjaanSearch;
use frontend\models\MahasiswaKeluarga;
use frontend\models\MahasiswaKeluargaSearch;
use frontend\models\MahasiswaPenyakit;
use frontend\models\MahasiswaPenyakitSearch;
use frontend\models\MahasiswaRekomendasi;
use frontend\models\MahasiswaRekomendasiSearch;
use frontend\models\MahasiswaHasiltest;
use frontend\models\MahasiswaHasiltestSearch;
use frontend\models\MahasiswaPelayanan;
use frontend\models\MahasiswaPelayananSearch;
use frontend\models\MahasiswaRekomendasiKonselor;
use frontend\models\MahasiswaRekomendasiKonselorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * MahasiswaController implements the CRUD actions for Mahasiswa model.
 */
class MahasiswaController extends Controller
{
    public function behaviors()
    {
        return [
             'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    // deny all POST requests
                    [
                        'allow' => true,
                        'verbs' => ['POST']
                    ],
                    // allow authenticated users
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    // everything else is denied
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function beforeAction($action) 
    {
        $this->layout = 'admin_base';
        return parent::beforeAction($action);
    }
    /**
     * Lists all Mahasiswa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MahasiswaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Mahasiswa model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $searchModelPendidikan = new MahasiswaPendidikanSearch();
        $searchModelPekerjaan = new MahasiswaPekerjaanSearch();
        $searchModelKeluarga = new MahasiswaKeluargaSearch();
        $searchModelPenyakit = new MahasiswaPenyakitSearch();
        $searchModelPelayanan = new MahasiswaPelayananSearch();
        $searchModelRekomendasi = new MahasiswaRekomendasiSearch();
        $searchModelHasiltest = new MahasiswaHasiltestSearch();
        $searchModelKonselor = new MahasiswaRekomendasiKonselorSearch();
        $dataProviderPendidikan = $searchModelPendidikan->search(['nim' => $id]);
        $dataProviderPekerjaan = $searchModelPekerjaan->search(['nim' => $id]);
        $dataProviderKeluarga = $searchModelKeluarga->search(['nim' => $id]);
        $dataProviderPenyakit = $searchModelPenyakit->search(['nim' => $id]);
        $dataProviderPelayanan = $searchModelPelayanan->search(['nim' => $id]);
        $dataProviderRekomendasi = $searchModelRekomendasi->search(['nim' => $id]);
        $dataProviderHasiltest = $searchModelHasiltest->search(['nim' => $id]);
        $dataProviderKonselor = $searchModelKonselor->search(['nim' => $id]);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'dataProviderPendidikan' => $dataProviderPendidikan,
            'dataProviderPekerjaan' => $dataProviderPekerjaan,
            'dataProviderKeluarga' => $dataProviderKeluarga,
            'dataProviderPenyakit' => $dataProviderPenyakit,
            'dataProviderPelayanan' => $dataProviderPelayanan,
            'dataProviderRekomendasi' => $dataProviderRekomendasi,
            'dataProviderHasiltest' => $dataProviderHasiltest,
            'dataProviderKonselor' => $dataProviderKonselor,
        ]);
    }

    /**
     * Displays a single Mahasiswa model.
     * @param string $id
     * @return mixed
     */
    public function actionViewDataDiri($id)
    {
        return $this->render('view-data-diri', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Mahasiswa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Mahasiswa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->nim]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Mahasiswa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->nim]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Mahasiswa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Lists all Pendidikan Mahasiswa
     * @return mixed
     */
    public function actionPendidikan($id)
    {
        $modelPendidikan = new MahasiswaPendidikan();
        if ($modelPendidikan->load(Yii::$app->request->post()) && $modelPendidikan->save()) {
            return $this->redirect(['pendidikan', 'id' => $id]);
        } else {
            $searchModel = new MahasiswaPendidikanSearch();
            $dataProvider = $searchModel->search(['nim' => $id]);
            return $this->render('pendidikan', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'mahasiswa' => $this->findModel($id),
                'modelPendidikan' => $modelPendidikan,
                'sidebar' => $this->getSideBarMahasiswa($id),
            ]);    
        }        
    }

    /**
     * Lists all Pekerjaan Mahasiswa
     * @return mixed
     */
    public function actionPekerjaan($id)
    {
        $modelPekerjaan = new MahasiswaPekerjaan();
        if ($modelPekerjaan->load(Yii::$app->request->post()) && $modelPekerjaan->save()) {
            return $this->redirect(['pekerjaan', 'id' => $id]);
        } else {
            $searchModel = new MahasiswaPekerjaanSearch();
            $dataProvider = $searchModel->search(['nim' => $id]);
            return $this->render('pekerjaan', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'mahasiswa' => $this->findModel($id),
                'modelPekerjaan' => $modelPekerjaan,
                'sidebar' => $this->getSideBarMahasiswa($id),
            ]);    
        }        
    }

    /**
     * Lists all Keluarga Mahasiswa
     * @return mixed
     */
    public function actionKeluarga($id)
    {
        $modelKeluarga = new MahasiswaKeluarga();
        if ($modelKeluarga->load(Yii::$app->request->post()) && $modelKeluarga->save()) {
            return $this->redirect(['keluarga', 'id' => $id]);
        } else {
            $searchModel = new MahasiswaKeluargaSearch();
            $dataProvider = $searchModel->search(['nim' => $id]);
            return $this->render('keluarga', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'mahasiswa' => $this->findModel($id),
                'modelKeluarga' => $modelKeluarga,
                'sidebar' => $this->getSideBarMahasiswa($id),
            ]);    
        }        
    }

    /**
     * Lists all penyakit Mahasiswa
     * @return mixed
     */
    public function actionPenyakit($id)
    {
        $modelPenyakit = new MahasiswaPenyakit();
        if ($modelPenyakit->load(Yii::$app->request->post()) && $modelPenyakit->save()) {
            return $this->redirect(['penyakit', 'id' => $id]);
        } else {
            $searchModel = new MahasiswaPenyakitSearch();
            $dataProvider = $searchModel->search(['nim' => $id]);
            return $this->render('penyakit', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'mahasiswa' => $this->findModel($id),
                'modelPenyakit' => $modelPenyakit,
                'sidebar' => $this->getSideBarMahasiswa($id),
            ]);    
        }        
    }

    /**
     * Lists all rekomendasi kerabat Mahasiswa
     * @return mixed
     */
    public function actionRekomendasi($id)
    {
        $modelRekomendasi = new MahasiswaRekomendasi();
        if ($modelRekomendasi->load(Yii::$app->request->post()) && $modelRekomendasi->save()) {
            return $this->redirect(['rekomendasi', 'id' => $id]);
        } else {
            $searchModel = new MahasiswaRekomendasiSearch();
            $dataProvider = $searchModel->search(['nim' => $id]);
            return $this->render('rekomendasi', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'mahasiswa' => $this->findModel($id),
                'modelRekomendasi' => $modelRekomendasi,
                'sidebar' => $this->getSideBarMahasiswa($id),
            ]);    
        }        
    }

    /**
     * Lists all hasil test Mahasiswa
     * @return mixed
     */
    public function actionHasiltest($id)
    {
        $modelHasiltest = new MahasiswaHasiltest();
        if ($modelHasiltest->load(Yii::$app->request->post()) && $modelHasiltest->save()) {
            return $this->redirect(['hasiltest', 'id' => $id]);
        } else {
            $searchModel = new MahasiswaHasiltestSearch();
            $dataProvider = $searchModel->search(['nim' => $id]);
            return $this->render('hasiltest', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'mahasiswa' => $this->findModel($id),
                'modelHasiltest' => $modelHasiltest,
                'sidebar' => $this->getSideBarMahasiswa($id),
            ]);    
        }        
    }

    /**
     * Lists all pengalaman pelayanan Mahasiswa
     * @return mixed
     */
    public function actionPelayanan($id)
    {
        $modelPelayanan = new MahasiswaPelayanan();
        if ($modelPelayanan->load(Yii::$app->request->post()) && $modelPelayanan->save()) {
            return $this->redirect(['pelayanan', 'id' => $id]);
        } else {
            $searchModel = new MahasiswaPelayananSearch();
            $dataProvider = $searchModel->search(['nim' => $id]);
            return $this->render('pelayanan', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'mahasiswa' => $this->findModel($id),
                'modelPelayanan' => $modelPelayanan,
                'sidebar' => $this->getSideBarMahasiswa($id),
            ]);    
        }        
    }

    /**
     * Lists all pengalaman pelayanan Mahasiswa
     * @return mixed
     */
    public function actionRekomendasiKonselor($id)
    {
        $modelKonselor = new MahasiswaRekomendasiKonselor();
        if ($modelKonselor->load(Yii::$app->request->post()) && $modelKonselor->save()) {
            return $this->redirect(['rekomendasi-konselor', 'id' => $id]);
        } else {
            $searchModel = new MahasiswaRekomendasiKonselorSearch();
            $dataProvider = $searchModel->search(['nim' => $id]);
            return $this->render('rekomendasi-konselor', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'mahasiswa' => $this->findModel($id),
                'modelKonselor' => $modelKonselor,
                'sidebar' => $this->getSideBarMahasiswa($id),
            ]);    
        }        
    }

    /**
     * Finds the Mahasiswa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Mahasiswa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Mahasiswa::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function getSideBarMahasiswa($id) 
    {
        return [[
                'url' => ['mahasiswa/pendidikan','id' => $id],
                'label' => 'Pendidikan Mahasiswa',
                'icon' => 'plus'
            ],
            [
                'url' => ['mahasiswa/pekerjaan','id' => $id],
                'label' => 'Pekerjaan Mahasiswa',
                'icon' => 'plus'
            ],
            [
                'url' => ['mahasiswa/keluarga','id' => $id],
                'label' => 'Keluarga Mahasiswa',
                'icon' => 'plus'
            ],
            [
                'url' => ['mahasiswa/penyakit','id' => $id],
                'label' => 'Riwayat Kesehatan',
                'icon' => 'plus'
            ],
            [
                'url' => ['mahasiswa/pelayanan','id' => $id],
                'label' => 'Pengalaman Pelayanan',
                'icon' => 'plus'
            ],
            [
                'url' => ['mahasiswa/rekomendasi','id' => $id],
                'label' => 'Rekomendasi Kerabat',
                'icon' => 'plus'
            ],
            [
                'url' => ['mahasiswa/hasiltest','id' => $id],
                'label' => 'Hasil Test & Wawancara',
                'icon' => 'plus'
            ],
            [
                'url' => ['mahasiswa/rekomendasi-konselor','id' => $id],
                'label' => 'Rekomendasi Konselor',
                'icon' => 'plus'
            ]
        ];
    }
}
