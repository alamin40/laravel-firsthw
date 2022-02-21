@extends('master')

@section('title')
    Home Page
@endsection

@section('body')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card-header">Prime Number1</div>
                    <div class="card-title py-3">
                        <form action="{{route('prime-number')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Give the number</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="first_name" />
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-3 col-form-label">Output</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{ isset($result) ? $result : ' '  }}" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-form-label"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" value="submit"  />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
