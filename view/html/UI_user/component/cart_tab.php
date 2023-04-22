<style>
    @media screen and (min-width: 320px){
        .text-item{
            font-size: 13px;
        }
        .text-header-cart{
            font-size: 13px;
        }
        #form_quantity{
            width: 40px;
        }
    }
    @media screen and (min-width: 576px){
        .text-item{
            font-size: 15px;
        }
        .text-header-cart{
            font-size: 15px;
        }
        #form_quantity{
            width: 50px;
        }

    }
    @media screen and (min-width: 768px){
        .text-header-cart{
            font-size: 16px;
        }
        #form_quantity{
            width: 60px;
        }

    }

    a div.cart-btn-tab{
        color: white;
        border: 1px solid rgb(224, 60, 1);
        background-color: rgb(224, 60, 1);
        padding: 5px;
    }
    .price-item-tab{
        color: rgba(224, 60, 1, 0.781);
        font-weight: 500;
        margin-left: auto;
        font-size: 20px;
    }

</style>
<div class="row">
    <div class="col">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr class="text-header-cart">
                    <th>Món Ăn</th>
                    <th>Danh Mục</th>
                    <th>Số Lượng</th>
                    <th>Đơn Giá</th>
                </tr>
                </thead>
                <tbody>
                    <tr class="text-item">
                        <th class="d-flex align-items-center">
                                <img class="me-4" src="https://i.imgur.com/2DsA49b.webp"
                                style="width:50%; max-width:100px" alt="Book">
                                <div>Bánh Xèo Tôm Thịt<div>
                        </th>
                        <th class="align-middle">
                            <p class="mb-0" style="font-weight: 500;">Món Chính</p>
                        </th>
                        <td class="align-middle">
                            <div class="d-flex flex-row">
                                <button class="btn btn-sm btn-link"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="fas fa-minus"></i>
                                </button>

                                <input id="form_quantity" min="0" name="quantity" value="2" type="number"
                                class="form-control form-control-sm" />

                                <button class="btn btn-sm btn-link"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </td>
                        <td class="align-middle">
                            <p class="mb-0" style="font-weight: 500;">70.000đ</p>
                        </td>
                    </tr>
                    <tr class="text-item">
                        <th class="d-flex align-items-center">
                                <img class="me-4" src="https://i.imgur.com/2DsA49b.webp"
                                style="width:50%; max-width:100px" alt="Book">
                                <div>Bánh Xèo Tôm Thịt<div>
                        </th>
                        <th class="align-middle">
                            <p class="mb-0" style="font-weight: 500;">Món Chính</p>
                        </th>
                        <td class="align-middle">
                            <div class="d-flex flex-row">
                                <button class="btn btn-sm btn-link"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="fas fa-minus"></i>
                                </button>

                                <input id="form_quantity" min="0" name="quantity" value="2" type="number"
                                class="form-control form-control-sm" />

                                <button class="btn btn-sm btn-link"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </td>
                        <td class="align-middle">
                            <p class="mb-0" style="font-weight: 500;">70.000đ</p>
                        </td>
                    </tr>
                    <tr class="text-item">
                        <th class="d-flex align-items-center">
                                <img class="me-4" src="https://i.imgur.com/2DsA49b.webp"
                                style="width:50%; max-width:100px" alt="Book">
                                <div>Bánh Xèo Tôm Thịt<div>
                        </th>
                        <th class="align-middle">
                            <p class="mb-0" style="font-weight: 500;">Món Chính</p>
                        </th>
                        <td class="align-middle">
                            <div class="d-flex flex-row">
                                <button class="btn btn-sm btn-link"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="fas fa-minus"></i>
                                </button>

                                <input id="form_quantity" min="0" name="quantity" value="2" type="number"
                                class="form-control form-control-sm" />

                                <button class="btn btn-sm btn-link"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </td>
                        <td class="align-middle">
                            <p class="mb-0" style="font-weight: 500;">70.000đ</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <div style="font-weight:500; font-size:20px">Tổng cộng: 
                    <span class="price-item-tab">260.000đ<span>
                </div>
                <a href="#" style="text-decoration:none;"><div class="cart-btn-tab">Xem Giỏ Hàng</div></a>
            </div>
        </div>
    </div>
</div>