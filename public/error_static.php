<!DOCTYPE html>
<html>
    <head>
        <title>An error occured</title>
		<style>
			html {
			    font-size: 100%; /* 1 */
			    -webkit-text-size-adjust: 100%; /* 2 */
			    -ms-text-size-adjust: 100%; /* 2 */
			    font-family: sans-serif;
			}
			body {
			    font-size: 1em;
			    margin: 15px 0 0 15px;
				background: #404040;
				color: whitesmoke;
			}
			h1 {
			    margin: 0.67em 0;
				font-size: 1.7em;
			}
			p {
			    margin: 1em 0;
			    font-size: .8em;
			}
			small {
			    font-size: 80%;
			}
			hr {
			    display: block;
			    height: 1px;
			    border: 0;
			    border-top: 1px solid #ccc;
			    margin: 1em 0;
			    padding: 0;
			}
		</style>
    </head>
    <body>
        <h1>Error</h1>
		<p>Sorry, an error occured while processing your request.</p>
		<p>Please, try again in a few moments.</p>
		<?php
		if (isset($pLogId)) {
			?>
			<hr>
			<p><small>This error was logged under ID: <?php echo $pLogId ?></small></p>
			<?php
		}
		?>
    </body>
</html>
