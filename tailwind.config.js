/** @type {import('tailwindcss').Config} */
module.exports = {
  /* content: [
    "./resources/views/components/forms/tinymce-editor.blade.php",
    "./resources/views/components/head/tinymce-config.blade.php",
    "./resources/css/app.css",
    ], */
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    extend: {},
  },
  plugins: [],
}
