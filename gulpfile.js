import pkg from 'gulp'
const { gulp, src } = pkg

import rsync from 'gulp-rsync'

function deploy() {
	return src('wordpress/wp-content/themes/traffus')
		.pipe(rsync({
			root: 'wordpress/wp-content/themes/traffus',
			hostname: 'u514968@u514968.ssh.masterhost.ru',
			destination: 'traffus.io/www/wp-content/themes/traffus',
			// clean: true, // Mirror copy with file deletion
			include: [/* '*.htaccess' */], // Included files to deploy,
			exclude: [ '**/Thumbs.db', '**/*.DS_Store' ],
			recursive: true,
			archive: true,
			silent: false,
			compress: true
		}))
}
export { deploy }
