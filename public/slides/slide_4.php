<section id="Slide_4">
    <h1 class="Title">Spacebar Media Workflow</h1>
    <div class="columns is-multiline">
        <div class="column is-full has-text-centered">
            <h2 class="subtitle has-text-centered">A user story gets created</h3>
        </div>
        <div class="column is-6 has-text-centered">
            <h3 class="subtitle has-text-success">Is it a new feature?</h3>
        </div>
        <div class="column is-6 has-text-centered">
            <h3 class="subtitle has-text-danger">Is it a bug?</h3>
        </div>
        <div class="column is-6 has-text-centered">
            <p>
                Create a branch from <strong>DEVELOP</strong>
            </p>
        </div>
        <div class="column is-6 has-text-centered">
            <p>
                Create a branch from <strong>MASTER</strong>
            </p>
        </div>
        <div class="column is-12 has-text-centered">
            <h4>1) Change to the branch we will use: </h4>
            <code>
                git <strong>checkout</strong> -f <strong>&lt;branch name&gt;</strong>
            </code>
            <h4>2) Pull the latest version from the respective branch: </h4>
            <code>
                git <strong>pull</strong> origin <strong>&lt;branch name&gt;</strong>
            </code>
            <h4>3) Create a new branch with the name of the ticket: </h4>
            <p>For NEW FEATURES</p>
            <code>
                git <strong>checkout -b</strong> <strong>feature/&lt;ticket-number&gt;</strong>
            </code>
            <p>For BUGS</p>
            <code>
                git <strong>checkout -b</strong> <strong>hotfix/&lt;ticket-number&gt;</strong>
            </code>
        </div>
    </div>
</section>