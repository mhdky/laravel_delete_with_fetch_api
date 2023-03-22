function deletePost(id) {
    const token = document.querySelector('input[name="_token"]').value;
    fetch('/post/' + id, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': token
        }
    })
    .then(response => {
        if (response.ok) {
            document.querySelector(`[data-post-id="${id}"]`).remove();
        } else {
            alert('Failed to delete post');
        }
    })
    .catch(error => {
        console.error(error);
        alert('Failed to delete post');
    });
}