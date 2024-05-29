$(document).ready(function () {
    // Capture the ID of the clicked item and set it in the hidden field of the modal
    const setItemId = (selector, idField) => {
        $(selector).click(function () {
            const itemId = $(this).data('id');
            $(idField).val(itemId);
        });
    };

    // Edit item
    setItemId('.edit', '#item_id');

    // Write-off item
    setItemId('.writeOff', '#writeOff_id');
    // Edit user

    setItemId('.user-edit', '#user-edit');
    // Delete user

    setItemId('.user-delete', '#user-delete');
});
