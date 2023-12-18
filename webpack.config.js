const Encore = require('@symfony/webpack-encore');

// Configure the runtime environment if it's not already done by the "encore" command.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // Directory where compiled assets will be stored
    .setOutputPath('public/build/')

    // Public path used by the web server to access the output path
    .setPublicPath('/build')

    // Copy files from the assets/img directory to the build folder
    .enableSassLoader()
    .copyFiles({
        from: './assets/img',
        to: 'images/[path][name].[ext]'
    })

    // JavaScript entry
    .addEntry('app', './assets/app.js')

    // SCSS entry
    .addStyleEntry('app_style', './assets/styles/scss/styles.scss')

    // Enable split chunks
    .splitEntryChunks()

    // Single runtime chunk for better caching
    .enableSingleRuntimeChunk()

    // Clean up the output directory before building
    .cleanupOutputBeforeBuild()

    // Enable notifications
    .enableBuildNotifications()

    // Enable source maps in development
    .enableSourceMaps(!Encore.isProduction())

    // Enable hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    // Babel configuration
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = '3.23';
    })

    // Enable Sass/SCSS support
    .enableSassLoader()

    // Uncomment to enable TypeScript support
    //.enableTypeScriptLoader()

    // Uncomment to enable React support
    //.enableReactPreset()

    // Uncomment to add integrity attributes for security
    //.enableIntegrityHashes(Encore.isProduction())

    // Uncomment to automatically provide jQuery for legacy plugins
    //.autoProvidejQuery()
;

// Export the final configuration
module.exports = Encore.getWebpackConfig();
