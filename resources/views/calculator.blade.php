@extends('master')

@section('title')
    Calculator
@endsection

@section('body')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">My Calculator</div>
                        <div class="card-body">
                            <form action="{{route("calculator-result")}}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="first_number" required class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Second Number</label>
                                    <div class="col-md-9">
                                        <input type="number"  name="second_number" required class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Select Action</label>
                                    <div class="col-md-9">
                                        <label><input type="radio"  name="operator" checked value="+"/> Addition </label>
                                        <label><input type="radio"  name="operator"         value="-"/> Subtraction </label>
                                        <label><input type="radio"  name="operator"         value="*"/> Multiply </label>
                                        <label><input type="radio"  name="operator"         value="/"/> Division </label>
                                        <label><input type="radio"  name="operator"         value="%"/> Remember </label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <input type="number" value="{{ isset($result) ? $result : ' '  }}" readonly class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9 text-center">
                                        <input type="submit" name="btn" class="btn btn-outline-success" value="submit"/>


                                        <!--                                        <input type="submit" name="operator" class="btn btn-outline-success" value="+"/>-->
                                        <!--                                        <input type="submit" name="operator" class="btn btn-outline-success" value="-"/>-->
                                        <!--                                        <input type="submit" name="operator" class="btn btn-outline-success" value="*"/>-->
                                        <!--                                        <input type="submit" name="operator" class="btn btn-outline-success" value="/"/>-->
                                        <!--                                        <input type="submit" name="operator" class="btn btn-outline-success" value="%"/>-->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
