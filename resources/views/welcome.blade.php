@extends('layouts.default')
@section('content')
<div class="content-page-box-area">
    <div class="row">
        <div class="col-lg-2 ">
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="news-feed-area">
                
                @forelse ($posts as $post)
                    
                
                    
    
                <div class="news-feed news-feed-post">
                    <div class="post-header d-flex justify-content-between align-items-center">
                        <div class="image">
                            <a href="https://templates.envytheme.com/zust/default/my-profile.html"><img
                                    src="{{ url('') }}/assets/user-32.jpg"
                                    class="rounded-circle" alt="image"></a>
                        </div>
                        <div class="info ms-3">
                            <span class="name"><a
                                    href="https://templates.envytheme.com/zust/default/my-profile.html">
                                    {{ $post->user->name }}
                                </a></span>
                        </div>
                    </div>

                    <div class="post-body">
                        <p>
                            {{ $post->content }}
                        </p>
                        
                        <ul class="post-meta-wrap d-flex justify-content-between align-items-center">
                            <li class="post-">
                                <button class="like-button" data-post-id="{{ $post->id }}">Like</button>

                                <span class="number like-count-{{ $post->id }}">{{ $post->likes->count() }} Likes</span>
                            </li>
                        </ul>
                    </div>
                </div>
                @empty
                <span class="">Not have any post</span>
                @endforelse
            </div>
        </div>

        <div class="col-lg-3 col-md-12">
            <aside class="widget-area">
                <div class="widget widget-weather">
                    <div class="weather-image">
                        <a href="https://templates.envytheme.com/zust/default/index.html#"><img
                                src="{{ url('') }}/assets/weather.jpg"
                                alt="image"></a>
                    </div>
                </div>
            </aside>
        </div>
        <!-- Like Modal -->
        <div class="modal fade" id="like-modal" tabindex="-1" role="dialog" aria-labelledby="like-modal-label">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="like-modal-label">Like this post</h4>
                    </div>
                    <div class="modal-body">
                        <form id="like-form">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Like</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
@endsection
@section('scripts')

<script>

    $('.like-button').click(function () {
        let post_id = $(this).data('post-id');

        // Show the pop-up form
        $('#like-modal').modal('show');

        $('#like-form').submit(function (e) {
            e.preventDefault();

            let email = $('#email').val();

            // Send the like request via AJAX
            $.ajax({
                type: 'POST',
                url: '/like/' + post_id,
                data: { 
                        email: email,
                        _token: '{{ csrf_token() }}'
                     },
                success: function (response) {
                    // Close the modal
                    $('#like-modal').modal('hide');

                    if (response.message === 'Liked successfully') {
                        // Update the like count on the page
                        $('.like-count-' + post_id).text(response.likeCount + ' Likes');

                        // Clear the email input
                        $('#email').val('');
                    } else if (response.error) {
                    // Display an alert for the specific error message
                    alert(response.error);
                }
                },
                error: function (error) {
                    // Close the modal in case of an error
                    $('#like-modal').modal('hide');
                    console.log(error);
                }
            });
        });
    });

    function showErrorAlert(message) {
        // Create and display a Bootstrap alert for the error message
        let errorAlert = `
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                ${message}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        `;

        // Append the error alert to a container (e.g., a div with id="error-container")
        $('#error-container').html(errorAlert);
    }

</script>
@endsection