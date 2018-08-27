<div class="modal fade" id="delete/{{$dataitem->id}}">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delete <b><u>{{$dataitem->name}}</u></b></h4>
                <h4 class="modal-title">Delete <b><u>{{$dataitem->id}}</u></b></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Are you sure you want to delete this purposed survey?
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                <a href="{{route('remove_data', $dataitem->id)}}"><button type="button" class="btn btn-danger" href="/remove/{{$dataitem->id}}">Delete</button></a>
            </div>
        </div>
    </div>
</div>