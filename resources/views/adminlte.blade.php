@extends('adminlte::page')

@section('htmlheader_title')
    Change Title here!
@endsection


@section('main-content')
    <h4>Matrícula</h4>

    <form-user>

    </form-user>

    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <wizard>
                    <wizard-step title="Usuari">
                        Usuari. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </wizard-step>
                    <wizard-step title="Dades personals">
                        Dades personals. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </wizard-step>
                    <wizard-step title="Estudi i curs">
                        Estudi i curs. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </wizard-step>
                    <wizard-step title="Mòduls professionals">
                        Mòduls professionals. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </wizard-step>
                    <wizard-step title="Unitats formatives">
                        Unitats formatives. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </wizard-step>
                </wizard>
            </div>
        </div>
    </div>

@endsection