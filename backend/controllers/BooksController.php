<?php

namespace backend\controllers;

use Yii;
use backend\models\Books;
use backend\models\BookSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BooksController implements the CRUD actions for Books model.
 */
class BooksController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['get'],
                ],
            ],
        ];
    }

    /**
     * Lists all Books models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new BookSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionBookOrder() {
        $sql = 'select bk.name,count(ordr.book_id) as total,bk.image
from book_orders  ordr 
left join books bk on bk.id=ordr.book_id
group by name,book_id order by qty desc';

        $count = Yii::$app->db->createCommand($sql)->queryScalar();

        $dataProvider = new \yii\data\SqlDataProvider([
            'sql' => $sql,
            'totalCount' => $count,
            'pagination' => [
                'pageSize' => 10
            ],
        ]);
        return $this->render('book-order', [
                    'dataProvider' => $dataProvider,
                        ]
        );
    }

    public function actionBookAll() {
        $sql = 'SELECT b.id,b.name as p_name,b.price,b.image,ord.qty,u.username,ord.create_date
FROM book_orders ord left join books b on ord.book_id=b.id left join user u on u.id = ord.user_id';
        $count = Yii::$app->db->createCommand($sql)->queryScalar();
        $dataProvider = new \yii\data\SqlDataProvider([
            'sql' => $sql,
            'totalCount' => $count,
            'pagination' => [
                'pageSize' => 10
            ],
        ]);
        return $this->render('book-all', [
                    //   'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                        ]
        );
    }

    /**
     * Displays a single Books model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Books model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Books();

        // $items = ArrayHelper::map(Categories::find()->all(), 'id', 'cat_name');
        //return $this->render('your_view',['model'=>$model, 'items'=>$items]);
        if ($model->load(Yii::$app->request->post())) {

            $model->image = UploadedFile::getInstance($model, 'image');
            if ($model->image !== null) {
                $arr = explode('/', $model->image->type);
                $ext = $arr[1];
            }
            $path = \Yii::getAlias('@backend') . '/web/images/uploads/' . $model->name . '.' . $ext;
            $model->image->saveAs($path);
            $model->image = $model->name . '.' . $ext;
            $model->create_date = date('Y-m-d H:i:s');
            $model->create_by = \Yii::$app->user->identity->id;
            $model->save();
            return $this->redirect('index'); //['view', 'id' => $model->id]
        } else {

            return $this->render('create', [
                        'model' => $model
            ]);
        }
    }

    /**
     * Updates an existing Books model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);


        if ($model->load(Yii::$app->request->post())) {

            $model->image = UploadedFile::getInstance($model, 'image');
            if ($model->image !== null) {
                $arr = explode('/', $model->image->type);
                $ext = $arr[1];
            }
            $path = \Yii::getAlias('@backend') . '/web/images/uploads/' . $model->name . '.' . $ext;
            $model->image->saveAs($path);
            $model->image = $model->name . '.' . $ext;
            $model->update_date = date('Y-m-d H:i:s');
            $model->update_by = \Yii::$app->user->identity->id;
            $model->save();




            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Books model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Books model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Books the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Books::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
