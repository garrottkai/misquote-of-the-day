<!DOCTYPE html>
<html>
	<head>
		<title>Misquote of the Day</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles.css">

		<!-- 1. Load libraries -->
		<!-- IE required polyfills, in this exact order -->
		<script src="node_modules/es6-shim/es6-shim.min.js"></script>
		<script src="node_modules/systemjs/dist/system-polyfills.js"></script>
		<script src="node_modules/angular2/es6/dev/src/testing/shims_for_IE.js"></script>

		<script src="node_modules/angular2/bundles/angular2-polyfills.js"></script>
		<script src="node_modules/systemjs/dist/system.src.js"></script>
		<script src="node_modules/rxjs/bundles/Rx.js"></script>
		<script src="node_modules/angular2/bundles/angular2.dev.js"></script>

		<!-- 2. Configure SystemJS -->
		<script>
			System.config({
				packages: {
					app: {
						format: 'register',
						defaultExtension: 'js'
					}
				}
			});
			System.import('app/main')
				.then(null, console.error.bind(console));
		</script>
	</head>

	<!-- 3. Display the application -->
	<body>
		<my-app>Loading...</my-app>
	</body>
</html>