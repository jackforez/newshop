@extends('page.layout.index')
@section('content')
<!-- Shoping Cart -->
<style>
    .my-box {
    width: 60px;
    position: relative;
    margin-right: 20px;
    cursor: pointer;
}
.my-box img {
  width: 100%;
}
.my-box::after {
  content: '\e870';
  font-family: Linearicons-Free;
  font-size: 16px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: rgba(0,0,0,0.5);
  color: #fff;
  transition: all 0.3s;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  -moz-transition: all 0.3s;
  opacity: 0;
}

.my-box:hover:after {
  opacity: 1;
}
</style>
<form class="bg0 p-t-140 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">SẢN PHẨM</th>
									<th class="column-2"></th>
									<th class="column-3">GIÁ</th>
									<th class="column-4">SỐ LƯỢNG</th>
									<th class="column-5">THÀNH TIỀN</th>
								</tr>
                                @foreach($data as $dt)
								<tr class="table_row">
									<td class="column-1">
										<div class="my-box">
											<a href=""><img src="upload/{{$dt->options->img}}" alt="IMG"></a>
										</div>
									</td>
									<td class="column-2">{{$dt->name}}</td>
									<td class="column-3">{{$dt->price}}</td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="{{$dt->qty}}">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5">{{$dt->price *$dt->qty}}</td>
								</tr>
                                @endforeach
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Mua thêm sản phẩm khác
							</div>

							<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Cập nhật lại giỏ hàng
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Thông tin thanh toán
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Tổng tiền:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
                                {{Cart::total()}} K
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Danh sách SP:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
                                    @foreach($data as $dt)
                                    {{$dt->name}} x {{$dt->qty}}</br>
                                    @endforeach
								</p>
							</div>
                        </div>
                        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<form action="">
                                <div class="form-group">
                                    <label >Họ tên:</label>
                                    <input type="text" class="form-control" placeholder="mời nhập họ tên" name="name">
                                </div>
                                <div class="form-group">
                                    <label >Họ tên:</label>
                                    <input type="text" class="form-control" placeholder="SĐT liên lạc" name="sdt">
                                </div>
                                <div class="form-group">
                                    <label >Họ tên:</label>
                                    <input type="text" class="form-control" placeholder="Địa chỉ cần ship" name="diachi">
                                </div>
                            </form>
                        </div>
                        <button type="button" class="btn btn-outline-success form-control m-t-20">ĐẶT MUA</button>
                        <button type="button" class="btn btn-outline-danger form-control m-t-10">XÓA GIỎ HÀNG</button>    
						
					</div>
				</div>
			</div>
		</div>
	</form>
		

@endsection