@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 p-4">
                <div>
                    <h3 class="text-center">Add New Task</h3>


                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" wire:model="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <button wire:click.prevent="addTask" class="btn btn-primary btn-block">Add</button>
                    </div>
                    </form>
                </div>
        </div>

        <div class="col-md-8 p-4">

<div>
    <h3 class="text-center">My Task </h3>
    <table class="table bg-white ">
        <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>

        </tbody>
    </table>
</div>


        </div>
    </div>
</div>
@endsection