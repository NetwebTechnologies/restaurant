<div class="actionbtns d-flex" style="gap: 5px;">
    <a href="{{ route('restaurants.edit', encrypt($model->id)) }}" class="action-btn btn btn-sm btn-primary edit_button">Edit</a>
    <form action="{{ route('restaurants.destroy', encrypt($model->id)) }}" method="POST" onsubmit="ajaxFormSubmission($(this))">
        @method("DELETE")
        @csrf
        <button type="submit"  class="action-btn btn btn-sm btn-danger">Delete</button>
    </form>
</div>
