<section class="container mt-5">
    <div class="accordion" id="accordionPanelsStayOpenExample">
        @if (count($pageArray) > 0)
            @foreach ($pageArray as $page)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapse-{{ $page->id }}" aria-expanded="false"
                            aria-controls="panelsStayOpen-collapse-{{ $page->id }}">
                            {{ $page->question }}
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapse-{{ $page->id }}" class="accordion-collapse collapse"
                        aria-labelledby="panelsStayOpen-heading-{{ $page->id }}">
                        <div class="accordion-body">
                            {{ $page->answer }}
                        </div>
                    </div>
                </div>
            @endforeach
                <div class="mt-4">
                    {{ $pageArray->links('components.general.pagination') }}
                </div>
        @else
        @endif
    </div>
</section>
