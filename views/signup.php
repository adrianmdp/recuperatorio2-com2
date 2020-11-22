<!DOCTYPE html>
<html>
    <head>
        <title>Recuperatorio Comision 2</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?= ASSETS ?>css/uikit.min.css" />
		<link rel="stylesheet" href="<?= ASSETS ?>css/styles.css" />
        <script src="<?= ASSETS ?>js/uikit.min.js"></script>
        <script src="<?= ASSETS ?>js/uikit-icons.min.js"></script>
    </head>
    <body class="login uk-cover-container uk-background-secondary uk-flex uk-flex-center uk-flex-middle uk-height-viewport uk-overflow-hidden uk-light" data-uk-height-viewport>
		<!-- overlay -->
		<div class="uk-position-cover uk-overlay-primary"></div>
		<!-- /overlay -->
		<div class="uk-width-medium uk-padding-small uk-position-z-index" uk-scrollspy="cls: uk-animation-fade">
			
			<div class="uk-text-center uk-margin">
				<img src="<?= ASSETS ?>images/bg-logo.png" alt="Logo">
			</div>

			<!-- login -->
			<form class="toggle-class">
				<fieldset class="uk-fieldset">
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<input name="name" class="uk-input uk-border-pill" required placeholder="Apellido" type="text">
						</div>
					</div>
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<input name="lastname" class="uk-input uk-border-pill" required placeholder="Apellido" type="password">
						</div>
					</div>
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<input name="email" class="uk-input uk-border-pill" required placeholder="Email" type="text">
						</div>
					</div>
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<input name="password" class="uk-input uk-border-pill" required placeholder="Contraseña" type="password">
						</div>
					</div>
					<div class="uk-margin-small">
						<div class="uk-inline uk-width-1-1">
							<input name="country" class="uk-input uk-border-pill" required placeholder="País" type="text">
						</div>
					</div>
					<div class="uk-margin-bottom">
						<button type="submit" class="uk-button uk-button-primary uk-border-pill uk-width-1-1">Registrarse</button>
					</div>
				</fieldset>
			</form>
			<!-- /login -->
			
			<!-- action buttons -->
			<div>
				<div class="uk-text-center">
					<a class="uk-link-reset uk-text-small toggle-class">Ya tenés cuenta?</a>
				</div>
			</div>
			<!-- action buttons -->
		</div>
		
	</body>
</html>