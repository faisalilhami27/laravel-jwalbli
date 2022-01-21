<?php

namespace App\Http\Controllers;

use App\Index;
use Illuminate\Http\Request;

class TestingController extends Controller
{
  protected $data;

  public function __construct()
  {
    $this->data = new Index();
  }

  /**
   * get data
   * @return string
   */
  public function getData()
  {
    return $this->data->getData();
  }

  /**
   * get data by id
   * @return string
   */
  public function getDataById(Request $request)
  {
    return $this->data->getDataById($request->id);
  }

  /**
   * @param Request $request
   * @return false|string
   */
  public function store(Request $request)
  {
    return $this->data->store([
      'name' => $request->name,
      'body' => $request->body,
      'userId' => $request->userId
    ]);
  }

  /**
   * @param Request $request
   * @param $id
   * @return false|string
   */
  public function update(Request $request)
  {
    return $this->data->update([
      'id' => $request->id,
      'name' => $request->name,
      'body' => $request->body,
      'userId' => $request->userId
    ]);
  }

  /**
   * @param Request $request
   * @param $id
   * @return false|string
   */
  public function destroy(Request $request)
  {
    return $this->data->destroy($request->id);
  }
}
