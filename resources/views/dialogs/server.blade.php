<div class="modal fade" id="server" data-resource="servers">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="fa fa-tasks"></i> <span>{{ Lang::get('servers.create') }}</span></h4>
            </div>
            <form role="form">
                <input type="hidden" id="server_id" name="id" />
                <input type="hidden" name="project_id" value="{{ $project->id }}" />
                <div class="modal-body">

                    <div class="callout callout-danger">
                        <i class="icon fa fa-warning"></i> {{ Lang::get('servers.warning') }}
                    </div>

                    <div class="form-group">
                        <label for="server_name">{{ Lang::get('servers.name') }}</label>
                        <input type="text" class="form-control" id="server_name" name="name" placeholder="Web Server" />
                    </div>
                    <div class="form-group">
                        <label for="server_user">{{ Lang::get('servers.connect_as') }}</label>
                        <input type="text" class="form-control" id="server_user" name="user" placeholder="deploy" />
                    </div>
                    <div class="form-group">
                        <label for="server_address">{{ Lang::get('servers.ip_address') }}</label>
                        <input type="text" class="form-control" id="server_address" name="ip_address" placeholder="192.168.0.1" />
                    </div>
                    <div class="form-group">
                        <label for="server_path">{{ Lang::get('servers.path') }}</label>
                        <input type="text" class="form-control" id="server_path" name="path" placeholder="/var/www/project" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left btn-delete"><i class="fa fa-trash"></i> {{ Lang::get('app.delete') }}</button>
                    <button type="button" class="btn btn-primary pull-right btn-save"><i class="fa fa-save"></i> {{ Lang::get('app.save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>