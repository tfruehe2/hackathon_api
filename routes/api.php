<?php

use Illuminate\Http\Request;
use App\Type;
use App\Transform;
use App\Criteria;
use App\ReviewCriteria;
use App\Review;
use App\TypeCriteria;

use App\Http\Resources\TypeResource;
use App\Http\Resources\TransformResource;
use App\Http\Resources\ReviewCriteriaResource;
use App\Http\Resources\ReviewResource;
use App\Http\Resources\TypeCriteriaResource;
use App\Http\Resources\CriteriaResource;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/type', function(Request $request) {
  return TypeResource::collection(Type::all());
});

Route::get('/v1/type/{id}', function($id) {
  return new TypeResource(Type::find($id));
});

Route::get('/v1/transform', function(Request $request) {
  return TransformResource::collection(Transform::all());
});

Route::get('/v1/transform/{id}', function($id) {
  return new TransformResource(Transform::find($id));
});

Route::get('/v1/criteria', function(Request $request){
  return CriteriaResource::collection(Criteria::all());
});

Route::get('/v1/criteria/{id}', function($id){
  return new CriteriaResource(Criteria::find($id));
});

Route::get('/v1/transform_criteria', function(Request $request){
  return ReviewCriteriaResource::collection(ReviewCriteria::all());
});

Route::get('v1/review', function(Request $request){
  return ReviewResource::collection(Review::all());
});

Route::get('v1/review/{id}', function($id) {
  return new ReviewResource(Review::find($id));
});

Route::get('/v1/type_criteria', function(Request $request){
  return TypeCriteriaResource::collection(ReviewCriteria::all());
});

Route::post('/v1/type', function(Request $request) {
  $type = \App\Type::create([
    'name' => $request->name,
    'description' => $request->description
  ]);
  return $type;
});

Route::post('/v1/transform', function(Request $request) {
  //$file_name = "images/tranform_images/{$request->name}.{$request->file('tranform_image')->extension()}";
  // $image = Image::make(Input::file('tranform_image'));
  // $image->save($file_name);
  $transform = Transform::create([
    'name' => $request->name,
    'type_id' => $request->type_id,
    'image_uri' =>"Testing",
    'description' => $request->description
  ]);
  return $transform;
});

Route::post('v1/criteria', function(Request $request){
  $criteria = Criteria::create([
    'name' => $request->name,
    'description' => $request->description,
  ]);
  return $criteria;
});


Route::post('v1/review_criteria', function(Request $request){
  $review_criteria = ReviewCriteria::create([
    'criteria_id' => $request->criteria_id,
    'review_id' => $request->review_id,
    'rating' => $request->rating
  ]);
  return $review_criteria;
});

Route::post('v1/review', function(Request $request) {
  $review = Review::create([
    'transform_id' => $request->transform_id,
    'comment' => $request->comment,
  ]);
  
});

Route::post('v1/type_criteria', function(Request $request){
  $type_criteria = TypeCriteria::create([
    'criteria_id' => $request->criteria_id,
    'type_id' => $request->type_id,

  ]);
  return $type_criteria;
});
