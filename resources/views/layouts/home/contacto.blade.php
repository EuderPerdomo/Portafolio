@extends('Templates.templatecontacto')

@section('contacto')
<!--Tomado de : https://bootsnipp.com/snippets/95Oj -->
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contacto <small>Ponte en contacto con migo</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="Nombre" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Correo</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Correo" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Tema</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Elija Una:</option>
                                <option value="service">General</option>
                                <option value="suggestions">Sugerencias</option>
                                <option value="product">Soporte</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Mensaje</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Enviar Mensaje</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Euder</legend>
            <address>
                <strong>Fabian</strong><br>
               Carrera 7A # 6A-45 Sur<br>
               San Talmo<br>
                <abbr title="Phone">
                    P:</abbr>
                (+57) 3107584084
            </address>
            <address>
                <strong>Euder Fabian Perdomo Ospitia</strong><br>
                <a href="mailto:#">efperdomo@unipanamericana.edu.co</a>
            </address>
            </form>
        </div>
    </div>
</div>
@endsection('content')