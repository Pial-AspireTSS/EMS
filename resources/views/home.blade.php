@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <!-- <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> -->
                <div class="panel-body" style="font-family: -webkit-body;">
                    <?php
                        echo "<h3><b>Today is " . date("d/m/Y") . ",</b>";
                        echo "<b> " . date("l")."</b><br>";
                        date_default_timezone_set("Asia/Dhaka");
                        echo "<b><big>" . date("h:ia")."</big></b></br></h3>";
                        $currentTime = DateTime::createFromFormat('H:ia', date("h:ia"));
                        $officeStart = new DateTime('9:10AM');
                        ?>
                        @if($currentTime > $officeStart)
                        <h3 style="color: Red">Oops!! You are late.</h3>
                        @else
                        <h3 style="color: Green">Well Done !! You are in time.</h3>
                        @endif
                        <hr>
                            <big>Click Confirm to Register your attendance to AspireTSS Database</big>
                        <hr>
                        <div class="col-sm-12">
                        <button type="submit" class="btn btn-block btn-primary" name="sub" value="sub">
                            Confirm Your Attendance
                        </button>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
