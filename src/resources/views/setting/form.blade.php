<div class="form-group {{ $errors->has('can_view_posts') ? 'has-error' : ''}}">
    {!! Form::label('can_view_posts', __('common.who_can_view_posts'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('can_view_posts', ['friends' => 'friends', 'everyone' => 'everyone'],  $setting->can_view_posts , ['class' => 'form-control']) !!}
        {!! $errors->first('can_view_posts', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('can_view_friends') ? 'has-error' : ''}}">
    {!! Form::label('can_view_friends', __('common.who_can_view_friends'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('can_view_friends', ['friends' => 'friends', 'everyone' => 'everyone'],  $setting->can_view_friends, ['class' => 'form-control']) !!}
        {!! $errors->first('can_view_friends', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('can_send_request') ? 'has-error' : ''}}">
    {!! Form::label('can_send_request', __('common.who_can_view_request'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('can_send_request', ['nobody' => 'nobody', 'everyone' => 'everyone'], $setting->can_send_request , ['class' => 'form-control']) !!}
        {!! $errors->first('can_send_request', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('can_send_message') ? 'has-error' : ''}}">
    {!! Form::label('can_send_message', __('common.who_can_view_messages'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('can_send_message', ['nobody' => 'nobody', 'everyone' => 'everyone'], $setting->can_send_message , ['class' => 'form-control']) !!}
        {!! $errors->first('can_send_message', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('lang') ? 'has-error' : ''}}">
    {!! Form::label('lang', __('common.lang'), ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('lang', ['fr' => 'french', 'en' => 'english'], auth()->user()->lang , ['class' => 'form-control']) !!}
        {!! $errors->first('lang', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
