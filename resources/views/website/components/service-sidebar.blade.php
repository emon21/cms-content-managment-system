<form role="search" class="pxa_searchFilter" method="get" action="{{ route('website.service') }}">
    <section class="pxa_allBlog_search_filter">
        <div class="pxa_searchFilter_wr">
            <label class="pxa_searchFilter_text">Search for:</label>
            <input type="search" placeholder="Searching..." name="search_keyword" class="pxa_searchFilter_input"
                value="{{ request('search_keyword') }}">
            <button class="pxa_searchFilter_btn" type="submit" value="Search">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </div>
    </section>
</form>

<section class="pxa_categories_box">
    <div id="pxa_allBlog_filter_categories" class="pxa_filter_categories">
        <h2 class="pxa_categories_widgetTitle">Service Categories :- </h2>
        <ul>
            <li class="pxa_cat_item @if (request()->url('website.service')) {{ 'active' }} @endif">
                <a class="menu " href="{{ route('website.service') }}">ALL</a>
            </li>

            @foreach ($category as $item)
                @if ($item->type == 'service')

                    <li>
                        <a class=" "
                            href="{{ route('website.service') }}?service={{ $item->id }}">{{ $item->name }}
                            - {{ $item->services->count() }}</a>
                    </li>

                @endif
            @endforeach


        </ul>
    </div>
</section>
