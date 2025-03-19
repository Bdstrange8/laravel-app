document.addEventListener('DOMContentLoaded', function() {
    // Initialize CKEditor on your target element with ID 'editor1'
    if (typeof CKEDITOR !== 'undefined') {
        const editorElement = document.getElementById('editor1');
        if (editorElement) {
            CKEDITOR.replace('editor1');
        }
    }
});