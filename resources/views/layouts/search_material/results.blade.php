<style>
    li {
        gap: 1px;
        margin-bottom: 15px;
    }

    p, .left1, .right1{
        font-size: small;
        margin: 0;
    }

    .left1, .right1 {
        color: grey;
        font-weight: lighter;
        width: 50%;
    }

    a {
        width: initial;
    }
    .gr {
        display: flex;
    }
</style>
@if($results->isEmpty())
    <p>No results found.</p>
@else
    <ul>
    @foreach($results as $row)
        <li>
            <a href="/study/53">Title</a>

            <div class="gr">
                <div color="black !important" class="left1">
                    <p><strong>Authors:</strong> Amistoso (2024) </p>
                </div>
                <div class="right1">
                    Approved at "Date"
                </div>
            </div>
            <div class="gr" >
                <div class="left1">
                    <strong>Keywords: </strong>
                    Kwords
                </div>
                <div class="right1">
                    <Strong>Study Type: </Strong>
                    Study
                </div>
            </div>

        </li>
    @endforeach

    </ul>
@endif
