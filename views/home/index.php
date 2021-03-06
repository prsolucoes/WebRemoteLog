<?php
use yii\helpers\Url;
?>
<div class="home-index">

    <div class="jumbotron">
        <h1><?php echo(Yii::$app->params['appName']); ?></h1>

        <p class="lead">Olá, para iniciar clique no botão abaixo.</p>

        <p>
			<a class="btn btn-lg btn-success" href="<?php echo(Url::to(['/log/index'])); ?>">Iniciar</a>
		</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Log remoto</h2>
                <p>Através de qualquer sistema/linguagem vcê pode enviar seus logs para serem guardados e visualizados remotamente</p>
            </div>
            <div class="col-lg-4">
                <h2>API simples</h2>
                <p>O sistema funciona a partir de um conjunto de APIs de fácil entendimento, bastando realizar uma requisição HTTP</p>
            </div>
            <div class="col-lg-4">
                <h2>Interface amigável</h2>
                <p>O sistema utiliza frameworks web de alto nível para a construção de uma interface simples e amigável</p>
            </div>
        </div>

    </div>
</div>
