@extends('layouts.default')
<style>
    th {
      padding: 5px 40px;
    }
    input {
      padding: 5px;
    }
    button {
      padding: 10px 20px;
    }
</style>
@section('title', 'add.blade.php')

@section('content')
<form action="/add" method="POST">
  <table>
    @csrf
    <tr>
      <th>
        氏名
      </th>
      <td>
        <input type="text" name="name">
      </td>
    </tr>
    <tr>
      <th>
        メールアドレス
      </th>
      <td>
        <input type="text" name="age">
      </td>
    </tr>
    <tr>
      <td>
        <button>送信</button>
      </td>
    </tr>
  </table>
</form>
@endsection
