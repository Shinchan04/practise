@extends('includes/master')
@section('title', 'best warehousing company, post agriculture services india,collateral management services in india,agri logistic warehouse - Sohan Lal Commodity Management Pvt. Ltd')

@section('content')
<!--Page Header Start-->
<section class="page-header clearfix innerPage_header" style="background-image: url(assets/images/backgrounds/icex.jpg);">
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>ICEX Stock Positions</li>
            </ul>
            <h2>ICEX Stock Positions</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Start Content-->
<section class="innerPage_section">
    <div class="container">
        <table width="100%" height="50" class="stock_ex_table">

            <tbody>
                <tr>
                    <th> Date </th>
                    <th> ICEX Stock</th>
                </tr>

                @foreach($result as $item)
                <tr>
                    <td>{{dateFormatMonth($item->date)}}</td>
                    <td><a href="{{$item->file}}"  target="blank">ICEX Stock</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>
<!--End Content-->

@endsection
