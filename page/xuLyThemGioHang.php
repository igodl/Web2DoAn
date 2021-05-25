<?php
// error_reporting(0);
session_start();
include( '../admincp/config/connect.php' );
if ( isset( $_POST[ 'themgiohang' ] ) ) {
  $id = $_GET[ 'idsanpham' ];
  $soluong = $_REQUEST[ 'num' ];
  $sql = "SELECT * FROM sanpham WHERE MaSP='" . $id . "' LIMIT 1";
  $query = mysqli_query( $mysqli, $sql );
  $row = mysqli_fetch_array( $query );
  if ( $row ) {
    $new_product = array( array( 'tensp' => $row[ 'TenSP' ], 'id_sanpham' => $id, 'soluong' => $soluong, 'giasp' => $row[ 'Gia' ], 'hinhanh' => $row[ 'Anh' ] ) );
 
    if ( isset( $_SESSION[ 'cart' ] ) && strlen( serialize( $_SESSION[ 'cart' ] ) ) != 6 ) {
      $found = false;
      foreach ( $_SESSION[ 'cart' ] as $cart_item ) {
        if ( $cart_item[ 'id_sanpham' ] == $id ) {
          $product[] = array( 'tensp' => $cart_item[ 'tensp' ], 'id_sanpham' => $cart_item[ 'id_sanpham' ], 'soluong' => $cart_item[ 'soluong' ] + $soluong, 'giasp' => $cart_item[ 'giasp' ], 'hinhanh' => $cart_item[ 'hinhanh' ] );
          $found = true;
          break;
        } else {
          $product[] = array( 'tensp' => $cart_item[ 'tensp' ], 'id_sanpham' => $cart_item[ 'id_sanpham' ], 'soluong' => $cart_item[ 'soluong' ], 'giasp' => $cart_item[ 'giasp' ], 'hinhanh' => $cart_item[ 'hinhanh' ] );
        }
      }

      if ( $found == false ) {
        $_SESSION[ 'cart' ] = array_merge( $product, $new_product );
      } else {
        $_SESSION[ 'cart' ] = $product;
      }
    } else {
      $_SESSION[ 'cart' ] = $new_product;
    }
  }

  header( 'Location:../index.php' );
}