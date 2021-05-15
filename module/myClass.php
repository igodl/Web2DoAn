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
			<a href="product.html"><img src="images/dummy/featured-products/' . $anh . '" alt="" width="518" height="358"/></a>
			<div class="img-overlay">
			<a href="product.html" class="btn more btn-primary">More</a>
			<a href="#" class="btn buy btn-danger">Buy</a>
			</div>
			</div>
			</div>
			<div class="main-titles">
			<h4 class="title">$' . $gia . '</h4>
			<h5 class="no-margin"><a href="product.html">' . $tenSp . '</a></h5>
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

        echo '<div class="span3">
				<div class="product">
				<div class="product-inner">
				<div class="product-img">
				<div class="picture">
				<a href="product.html"><img src="images/dummy/products/' . $anh . '" alt="" width="540" height="374"/></a>
				<div class="img-overlay">
				<a href="product.html" class="btn more btn-primary">More</a>
				<a href="#" class="btn buy btn-danger">Add to Cart</a>
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
}
?>