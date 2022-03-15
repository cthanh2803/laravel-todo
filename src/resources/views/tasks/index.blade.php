<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="/">Todo App</a>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <nav class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-body">
                                <a href="#" class="btn btn-default btn-block">
                                Add Folders
                                </a>
                            </div>
                            <div class="list-group">
                                @foreach($folders as $folder)
                                    <a href="{{ route('tasks.index', ['id' => $folder->id]) }}" class="list-group-item {{ $current_folder_id === $folder->id ? 'active' : '' }}"> 
                                        {{ $folder->title }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="column col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">Task</div>
                        <div class="panel-body">
                            <div class="text-right">
                                <a href="#" class="btn btn-default btn-block">
                                    Add Task
                                </a>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Expire</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>