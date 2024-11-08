
                    <form role="search" class="pxa_searchFilter" method="get" action="{{ route('website.blog') }}">
                        <section class="pxa_allBlog_search_filter">
                            <div class="pxa_searchFilter_wr">
                                <label class="pxa_searchFilter_text">Search for:</label>
                                <input type="search" placeholder="Searching..." name="search_keyword"
                                    class="pxa_searchFilter_input" value="{{ request('search_keyword') }}">
                                <button class="pxa_searchFilter_btn" type="submit" value="Search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </section>
                    </form>

                    <section class="pxa_categories_box">
                        <div id="pxa_allBlog_filter_categories" class="pxa_filter_categories">
                            <h2 class="pxa_categories_widgetTitle">Blog Categories Total {{ $blog->count() }}</h2>
                            <ul>
{{-- {{ request()->routeIs('website.blog') ? 'active' : '' }} 

<li class="pxa_cat_item @if(categoryId() == $cat->id) active @endif" style="background-color: {{ $cat->color }}; color: {{ $cat->text_color })">--
    @if('category' == $cat->id) active @endif
    
    {{ request('category') == $cat->id ? 'active' : '' }}
{{ request()->routeIs('website.blog') ? 'active' : '' }} @if (request()->routeIs('website.blog') }}(request('category') == $cat->id) 'active' : '' @endif

{{ request('category') == $cat->id') ? 'active' : '' }} 

{{ request(('category') == $cat->id) ? 'active' : '' }} 

@if('category' == $cat->id) ? 'active' : '' @endif

{{ request()->routeIs('website.blog') ? 'active' : '' }} 
{{ request('website.blog') ? 'active' : '' }}
    }}
                                {{-- @if (request()->routeIs('website.blog') ? active : '') @endif --}}


                                {{-- {{(Route::current()->getName() === 'website.blog') ? 'active' : ''}} --}}
{{-- @if(Request::is('tickets/create')) {{ "class='active'" }} @endif --}}
{{-- @if(request(!('category') == $cat->id)->url('website.blog')) {{ 'active' }} @endif --}}

{{-- @if(request()->url('website.blog')) {{ 'active' }} @endif
{{ request('category') == $cat->id ? 'active' : '' }} --}}


                                <li class="pxa_cat_item {{ url('website.blog') ? 'active' : '' }}" >
                                    <a class=""
                                        href="{{ route('website.blog') }}">ALL</a>
                                    </li>

                                @foreach ($category as $item)

                                @if($item->type == 'blog')

                                <li class="pxa_cat_item {{ request('category') == $item->id ? 'active' : '' }} ">
                                            
                                            <a class=" " href="{{ route('website.blog') }}?category={{ $item->id }}">{{ $item->name }}
                                                - {{ $item->blogs->count() }}</a>
                                        </li>


                               

                                {{-- <li>
                                        <a href="">{{ $item->name }}</a>
                                       </li> --}}

                                       {{-- @else
                                       <span>No Category</span> --}}

                                @endif

                                
                                   {{-- @switch($type = $cat->type)

                                   
                                    
                                    @case($type =='service')

                                        <li class="pxa_cat_item @if(request('category') == $cat->id) {{ 'active' }} @endif">
                                            <a class="menu"
                                                href="{{ route('category', $cat->slug) }}">{{ $cat->name }}</a>
                                        </li>

                                    @break;

     
                                   @endswitch --}}

                                @endforeach


                            </ul>
                        </div>
                    </section>



               