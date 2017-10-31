<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">@allProTech</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8 col-md-offset-2 col-sm-12">

            <br>

        @foreach($articles->data as $article)
            <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">{{$article->title}}</h2>
                        <p class="card-text">
                            {{str_limit($article->description,200)}}
                        </p>
                        <a href="{{route('article.show',[$article->id])}}" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on {{date_create($article->published->date)->format('d M Y')}} by
                        <a href="#">Author</a>
                    </div>
                </div>
        @endforeach

        <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item {{isset($articles->meta->pagination->links->previous) ? '' : 'disabled'}}">
                    <a class="page-link" href="?{{isset($articles->meta->pagination->links->previous) ? parse_url($articles->meta->pagination->links->previous,PHP_URL_QUERY) : '#'}}">&larr; Older</a>
                </li>
                <li class="page-item {{isset($articles->meta->pagination->links->next) ? '' : 'disabled'}}">
                    <a class="page-link" href="?{{isset($articles->meta->pagination->links->next) ? parse_url($articles->meta->pagination->links->next,PHP_URL_QUERY) : '#'}}">Newer &rarr;</a>
                </li>
            </ul>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>