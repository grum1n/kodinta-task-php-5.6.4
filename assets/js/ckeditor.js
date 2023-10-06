ClassicEditor
// .create(document.querySelector('#editor'), {
//     ckfinder: {
//         uploadUrl: 'ckfileupload.php'
//     }
// })
.create(document.querySelector('#editor'))
.then(editor => {
    console.log(editor);
})
.catch(error => {
    console.error(error);
});