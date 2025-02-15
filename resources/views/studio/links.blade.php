@extends('layouts.sidebar')

@section('content')

        <h2 class="mb-4"><i class="bi bi-link-45deg"> Links</i></h2>

        <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Link</th>
            <th scope="col">Title</th>
            <th scope="col">Click</th>
            <th scope="col">Order ⏶</th>
            <th scope="col">Pin Link ⏶</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
        @foreach($links as $link)
          <tr>
            <td title="{{ $link->link }}">{{ Str::limit($link->link, 30) }}</td>
            <td title="{{ $link->title }}">{{ Str::limit($link->title, 30) }}</td>
            <td class="text-right">{{ $link->click_number }}</td>
            <td class="text-right">{{ $link->order }}</td>
            <td><a href="{{ route('upLink', ['up' => $link->up_link, 'id' => $link->id]) }}" class="text-primary">{{ $link->up_link }}</a></td>
            <td><a href="{{ route('editLink', $link->id ) }}">Edit</a></td>
            <td><a href="{{ route('deleteLink', $link->id ) }}" class="text-danger">Delete</a></td>
          </tr>
          @endforeach
        </tbody>
        </table>

            <ul class="pagination justify-content-center">
                  {!! $links ?? ''->links() !!}
            </ul>

@endsection
