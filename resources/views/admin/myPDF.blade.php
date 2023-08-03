<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">{{ $title }}</h1>
    <table class="table table-bordered">
        <thead>
          <tr class="text-center">
            <th scope="col" class="align-middle">Id</th>
            <th scope="col" class="align-middle">Mã Đơn Hàng</th>
            <th scope="col" class="align-middle">Tên Khách Hàng</th>
            <th scope="col" class="align-middle">Email</th>
            <th scope="col" class="align-middle">Số điện thoại</th>
            <th scope="col" class="align-middle">Địa chỉ</th>
            <th scope="col" class="align-middle">Tổng Tiền</th>
            <th scope="col" class="align-middle">Ghi chú</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($bills as $bill)
            <tr class="text-center">
                <th scope="row" class="align-middle">{{ $bill->id }}</th>
                <td class="align-middle">{{ $bill->bill_name }}</td>
                <td class="align-middle">{{ $bill->user_name }}</td>
                <td class="align-middle">{{ $bill->email }}</td>
                <td class="align-middle">{{ $bill->phone_number }}</td>
                <td class="align-middle">{{ $bill->address }}</td>
                <td class="align-middle">{{ $bill->sum_price }}</td>
                <td class="align-middle">{{ $bill->description }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>