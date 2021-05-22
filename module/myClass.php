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

  function themGioHang( $maSP, $soLuong ) {
    $link = $this->connection();
    $result = mysqli_query( $link, "SELECT * FROM `sanpham` WHERE MaSP = $maSP" );
    $i = mysqli_num_rows( $result );
    if ( $i > 0 ) {
      $row = mysqli_fetch_array( $result );
      $tenSp = $row[ 'TenSP' ];
      $gia = $row[ 'Gia' ];
      $anh = $row[ 'Anh' ];

    } else
      echo "Khong co ket qua nao duoc tim thay";

    mysqli_query( $link, "INSERT INTO `giohang`(`MaSP`,`TenSP`,`SoLuong`, `Gia`, `Anh`) VALUES ('$maSP','$tenSp','$soLuong','$gia','$anh')" );
  }

  function themTrungGioHang( $maSP, $soLuongThem ) {
    $link = $this->connection();
    $result = mysqli_query( $link, "SELECT MaSP FROM `giohang` WHERE MaSP = $maSP" );
    $i = mysqli_num_rows( $result );
    if ( $i > 0 ) {
      $row = mysqli_fetch_array( $result );

      $soLuongDangCo = $row[ 'SoLuong' ];

    } else
      echo "Khong co ket qua nao duoc tim thay";
	  
	 $soLuongDangCo+=$soLuongThem; 

    mysqli_query( $link, "UPDATE `giohang` SET `SoLuong`='$soLuongDangCo' WHERE 1");
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
        //		  <a href="index-boxed-pattern.php?id='.$maSP.'" class="btn buy btn-danger">Buy</a>
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

        echo '<div class="span3">
				<div class="product">
				<div class="product-inner">
				<div class="product-img">
				<div class="picture">
				<a href="product.php?id=' . $maSP . '"><img src="images/dummy/products/' . $anh . '" alt="" width="540" height="374"/></a>
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
        //		  <a href="#" class="btn buy btn-danger">Add to Cart</a>
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

  function xuatGioHang( $query ) {
    $link = $this->connection();
    $result = mysqli_query( $link, $query );
    $i = mysqli_num_rows( $result );
    if ( $i > 0 ) {
      while ( $row = mysqli_fetch_array( $result ) ) {

        $maSP = $row[ 'MaSP' ];
        $tenSP = $row[ 'TenSP' ];
        $soLuong = $row[ 'SoLuong' ];
        $gia = $row[ 'Gia' ];
        $anh = $row[ 'Anh' ];

        echo '<tr>
				<td class="image"><img src="images/dummy/products/' . $anh . '" alt="" width="124" height="124"/></td>
				<td class="desc">' . $tenSP . ' &nbsp; <a title="Remove Item" href="checkout-step-1.php?Xoa=' . $maSP . '">Xóa</a> </td>
				<td class="qty">
				<input type="text" class="tiny-size" value="' . $soLuong . '"/>
				</td>
				<td class="price">
				$' . $gia . '
				</td>
			</tr>';


      }
    }

  }

  function tienGioHang( $query ) {
    $link = $this->connection();
    $result = mysqli_query( $link, $query );
    $i = mysqli_num_rows( $result );
    $tongTien = 0;
    if ( $i > 0 ) {
      while ( $row = mysqli_fetch_array( $result ) ) {

        $maSP = $row[ 'MaSP' ];
        $tenSP = $row[ 'TenSP' ];
        $soLuong = $row[ 'SoLuong' ];
        $gia = $row[ 'Gia' ];
        $anh = $row[ 'Anh' ];
        $tongTien += $soLuong * $gia;
      }
      echo '$' . $tongTien;
    }

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
          header( 'location:index.php' );

        } else if ( $taikhoan == "" || $matkhau == "" ) {
          echo "Vui lòng điền đầy đủ thông tin";
        }


      }
    }
  }


}
?>
