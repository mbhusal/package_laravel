<div class="modal fade" id="view/{{$dataitem->id}}">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delete <b><u>{{$dataitem->name}}</u></b></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <b>Name of Purposed Survey:</b> {{$dataitem->name}} <br>
                <b>Status:</b> {{$dataitem->is_published == true ? 'Published': 'Unpublished'}} <br>
                <b>Purposed By:</b> {{$dataitem->user_id}} <br>
                <b>Purposed At:</b> {{$dataitem->created_at}}
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>