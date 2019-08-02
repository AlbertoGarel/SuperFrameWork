let deleteModal= $('#deleteModal');

let deleteMsg = (post, id)=>{
    $(this).click(function(event){
        event.preventDefault();
    })
    deleteModal.modal('show');
    $('.modal-body').text(post);
    $('.modal-footer .btn-danger').attr("id",id);
}

$('.modal-footer .btn-danger').on("click",(ev)=>{
    let id= $(ev.target).attr("id");
    window.location.href="/delete-post/"+id;
})