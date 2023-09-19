<form action="/api/task{{$task->id}}" method="post">
    {{csrf_field()}}
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="description" placeholder="Description">
    <select name="user_id" placeholder="User_id">
        @foreach ($users as $user)
        <optopn value="{{$user->id}}" {{$user->id == $task->user_id ? 'selected' : ''}}>{{$user->name}}</option>
            @endforeach
    </select>
    <input type="date" name="end_date" placeholder="End_date">
    <select name="status" placeholder="Status">
        <option value=1
<?php echo $task->status == 1 ? 'selected' : '' ?>>Open</option>
        <option value=0
        <?php echo $task->status == 0 ? 'selected' : '' ?>>Open</option>>Closed</option>
    </select>
    <input type="submit" value="Ok">
</form>