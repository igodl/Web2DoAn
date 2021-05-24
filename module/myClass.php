<?php
class myClass {
  function connection() {
    $con = mysqli_connect( "localhost", "vy", "123456", "web2db" );
    if ( !$con ) {
      echo "Không kết nối được cơ sở dữ liệu";
      exit();
    } else {
      return $con;
    }
  }


  // ------------------------ XUAT THONG TIN TRANG INDEX -------------------------------

  function xuatFeaturedProducts( $query ) {
    $link = $this->connection();
    $result = mysqli_query( $link, $query );
    $i = mysqli_num_rows( $result );
    if ( $i > 0 ) {
      while ( $row = mysqli_fetch_array( $result ) ) {
        $maSP = $row[ 'MaSP' ];
        $tenSp = $row[ 'TenSP' ];
        $gia = $row[ 'Gia' ];
        $moTa = $row[ 'MoTa' ];
        $anh = $row[ 'Anh' ];

        echo '<div class="span4">
			<div class="product">
			<div class="product-img featured">
			<div class="picture">
			<a href="product.php?id=' . $maSP . '"><img src="images/dummy/products/' . $anh . '" alt="" width="518" height="358"/></a>
			<div class="img-overlay">
			<a href="product.php?id=' . $maSP . '" class="btn more btn-primary">More</a>
			
			</div>
			</div>
			</div>
			<div class="main-titles">
			<h4 class="title">$' . $gia . '</h4>
			<h5 class="no-margin"><a href="product?id=.php?id=' . $maSP . '">' . $tenSp . '</a></h5>
			</div>
			<p class="desc">' . $moTa . '</p>
			</div>
			</div>  
			';
      }
    }
  }

  function xuatNewProductsInTheShop( $query ) {
    $link = $this->connection();
    $result = mysqli_query( $link, $query );
    $i = mysqli_num_rows( $result );
    if ( $i > 0 ) {
      while ( $row = mysqli_fetch_array( $result ) ) {
        $maSP = $row[ 'MaSP' ];
        $tenSp = $row[ 'TenSP' ];
        $gia = $row[ 'Gia' ];
        $moTa = $row[ 'MoTa' ];
        $anh = $row[ 'Anh' ];

        echo '<div class="span3" style="height: 350px;">
				<div class="product">
				<div class="product-inner">
				<div class="product-img">
				<div class="picture">
				<a href="product.php?id=' . $maSP . '"><img src="images/dummy/products/' . $anh . '" alt="" width="50px" height="374"/></a>
				<div class="img-overlay">
				<a href="product.php?id=' . $maSP . '" class="btn more btn-primary">More</a>
				
				</div>
				</div>
				</div>
				<div class="main-titles no-margin">
				<h4 class="title">$' . $gia . '</h4>
				<h5 class="no-margin">' . $tenSp . '</h5>
				</div>
				<p class="desc">' . $moTa . '</p>
				<div class="row-fluid hidden-line">
				<div class="span6">
				<a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
				<a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
				</div>
				<div class="span6 align-right">
				<span class="icon-star stars-clr"></span>
				<span class="icon-star stars-clr"></span>
				<span class="icon-star stars-clr"></span>
				<span class="icon-star stars-clr"></span>
				<span class="icon-star stars-clr"></span>
				</div>
				</div>
				</div>
				</div>
				</div>  
				';
       
      }
    }
  }


  // --------------------------------- XUAT CHI TIET SAN PHAM ---------------------------------------

  function xuatAnhChiTietSanPham( $query ) {
    $link = $this->connection();
    $result = mysqli_query( $link, $query );
    $i = mysqli_num_rows( $result );
    if ( $i > 0 ) {
      while ( $row = mysqli_fetch_array( $result ) ) {
        $anh = $row[ 'Anh' ];

        echo '<div class="span5">
          <div class="product-preview">
            <div class="picture"> <img src="images/dummy/products/' . $anh . '" alt="" width="940" height="940" id="mainPreviewImg"/> </div>
            <div class="thumbs clearfix">
              <div class="thumb active"> <a href="#mainPreviewImg"><img src="images/dummy/products/' . $anh . '" alt="" width="940" height="940"/></a> </div>
              <div class="thumb"> <a href="#mainPreviewImg"><img src="images/dummy/products/' . $anh . '" alt="" width="940" height="940"/></a> </div>
              <div class="thumb"> <a href="#mainPreviewImg"><img src="images/dummy/products/' . $anh . '" alt="" width="940" height="940"/></a> </div>
              <div class="thumb"> <a href="#mainPreviewImg"><img src="images/dummy/products/' . $anh . '" alt="" width="940" height="940"/></a> </div>
              <div class="thumb"> <a href="#mainPreviewImg"><img src="images/dummy/products/' . $anh . '" alt="" width="940" height="940"/></a> </div>
            </div>
          </div>
        </div>';
      }
    }

  }

  function xuatTenGiaSanPham( $query ) {
    $link = $this->connection();
    $result = mysqli_query( $link, $query );
    $i = mysqli_num_rows( $result );
    if ( $i > 0 ) {
      while ( $row = mysqli_fetch_array( $result ) ) {
        $tenSP = $row[ 'TenSP' ];
        $gia = $row[ 'Gia' ];

        echo '<div class="product-title">
            <h1 class="name">' . $tenSP . '</h1>
            <div class="meta"> <span class="tag">$ ' . $gia . '</span> </div>
          </div>';
      }
    }

  }

  function xuatNoiDungSanPham( $query ) {
    $link = $this->connection();
    $result = mysqli_query( $link, $query );
    $i = mysqli_num_rows( $result );
    if ( $i > 0 ) {
      while ( $row = mysqli_fetch_array( $result ) ) {
        $noiDung = $row[ 'NoiDung' ];

        echo '<p>' . $noiDung . ' </p>';
      }
    }


  }

  function xuatRelatedProducts( $query ) {
    $link = $this->connection();
    $result = mysqli_query( $link, $query );
    $i = mysqli_num_rows( $result );
    if ( $i > 0 ) {
      while ( $row = mysqli_fetch_array( $result ) ) {
        $id = $row[ 'MaSP' ];
        $tenSP = $row[ 'TenSP' ];
        $gia = $row[ 'Gia' ];
        $moTa = $row[ 'MoTa' ];
        $anh = $row[ 'Anh' ];

        echo '        <div class="span3">
          <div class="product">
            <div class="product-inner">
              <div class="product-img">
                <div class="picture"> <a href="product.php?id=' . $id . '"><img src="images/dummy/products/' . $anh . '" alt="" width="540" height="374"/></a>
                  <div class="img-overlay"> <a class="btn more btn-primary" href="product.php?id=' . $id . '">More</a> 
					 <span class="btn buy btn-danger">Add to Cart</span> </div>
                </div>
              </div>
              <div class="main-titles no-margin">
                <h4 class="title"><span class="striked">$' . rand( 40, 150 ) . '</span> <span class="red-clr">$' . $gia . '</span></h4>
                <h5 class="no-margin">' . $tenSP . '</h5>
              </div>
              <p class="desc">' . $moTa . '</p>
              <p class="center-align stars"> <span class="icon-star stars-clr"></span> <span class="icon-star stars-clr"></span> <span class="icon-star stars-clr"></span> <span class="icon-star stars-clr"></span> <span class="icon-star"></span> </p>
            </div>
          </div>
        </div>
		  
';

      }
    }
  }

  //--------------------------------- Gio Hang ----------------------------------

  function xuatGioHangNew() {

    foreach ( $_SESSION[ 'cart' ] as $cart_item ) {

      echo '<tr>
				<td class="image"><img src="images/dummy/products/' . $cart_item[ 'hinhanh' ] . '" alt="" width="124" height="124"/></td>
				<td class="desc">' . $cart_item[ 'tensp' ] . ' &nbsp; <a title="Remove Item" href="page/xoaGioHang.php?id=' . $cart_item[ 'id_sanpham' ] . '">Xóa</a> </td> 
				<td class="qty">
				<input type="text" class="tiny-size" value="' . $cart_item[ 'soluong' ] . '"/>
				</td>
				<td class="price">
				$' . $cart_item[ 'giasp' ] . '
				</td>
			</tr>';

    }

  }

  function tienGioHangNew() {
    $tongTien = 0;
    foreach ( $_SESSION[ 'cart' ] as $cart_item ) {

      $tongTien += $cart_item[ 'giasp' ] * $cart_item[ 'soluong' ];

    }
    echo $tongTien;
  }

  function soMonHang() {
    $count = 0;
    foreach ( $_SESSION[ 'cart' ] as $cart_item ) {

      $count++;

    }
    echo $count;
  }

  function xoaSPGioHang( $query ) {
    $link = $this->connection();

    if ( !mysqli_query( $link, $query ) ) {
      echo "Xoa san pham gio hang that bai";
    }

  }

  //---------------------------------------- Dang Nhap -----------------------------------------------------

  function login( $taikhoan, $matkhau ) {
    $link = $this->connection();
    $result = mysqli_query( $link, "SELECT * FROM `account` WHERE `PhanQuyen` = 'admin' " );
    $i = mysqli_num_rows( $result );
    if ( $i > 0 ) {
      while ( $row = mysqli_fetch_array( $result ) ) {

        $id = $row[ 'Id' ];
        $user = $row[ 'User' ];
        $pass = $row[ 'Pass' ];
        $tenUser = $row[ 'TenUser' ];
        $phanQuyen = $row[ 'PhanQuyen' ];

        if ( $taikhoan == $user && $matkhau == $pass ) {
          session_start();
          $_SESSION[ 'myuser' ] = $taikhoan;
          $_SESSION[ 'mypass' ] = $matkhau;
          header( 'location:admincp/admin.php' );
          break;
        }
      }
    }
  }

  function confirmlogin( $taikhoan, $matkhau ) {
    $link = $this->connection();
    $result = mysqli_query( $link, "SELECT * FROM `account` WHERE `PhanQuyen` = 'admin' " );
    $i = mysqli_num_rows( $result );
    $check = 0;

    if ( $i > 0 ) {
      while ( $row = mysqli_fetch_array( $result ) ) {

        $id = $row[ 'Id' ];
        $user = $row[ 'User' ];
        $pass = $row[ 'Pass' ];
        $tenUser = $row[ 'TenUser' ];
        $phanQuyen = $row[ 'PhanQuyen' ];

        if ( $taikhoan == $user && $matkhau == $pass ) {
          $check = 1;
          break;
        }
      }
    }
    if ( $check == 0 )
      header( 'location:../index.php' );
  }

}
?>
