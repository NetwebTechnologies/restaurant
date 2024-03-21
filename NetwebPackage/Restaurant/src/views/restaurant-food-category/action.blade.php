<div class="actionbtns d-flex" style="gap: 5px;">
    <a href="javascript::void()" onclick="modalShow(`{{ route('restaurant_food_categories.edit', encrypt($model->id)) }}`, 'get', 'Edit Restaurant Category')" class="action-btn btn btn-sm btn-primary edit_button">Edit</a>
    <form action="{{ route('restaurant_food_categories.destroy', encrypt($model->id)) }}" method="POST" onsubmit="ajaxFormSubmission($(this))">
        @method("DELETE")
        @csrf
        <button type="submit"  class="action-btn btn btn-sm btn-danger">Delete</button>
    </form>
</div>
