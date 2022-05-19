@extends('Documentation.include.layout')

@section('title_page', 'Atom Notifcations')

@section('content')
    <section id="Components" class="">
        <h2>Notifications</h2>

        <h3>Notifications Types</h3>
        <article>
            <div>
                <button class="a-btn a-primary notification-btn" data-text="this is a primary notification" data-type="primary">Primary</button>
                <button class="a-btn a-secondary notification-btn" data-text="this is a secondary notification" data-type="secondary">Secondary</button>
                <button class="a-btn a-light notification-btn" data-text="this is a light notification zadazdqsdazsqdazd" data-type="light">Light</button>
                <button class="a-btn a-success notification-btn" data-text="this is a success notification" data-type="success">Success</button>
                <button class="a-btn a-info notification-btn" data-text="this is an info notification" data-type="info">Info</button>
                <button class="a-btn a-warning notification-btn" data-text="this is a warning notification" data-type="warning">Warning</button>
                <button class="a-btn a-danger notification-btn" data-text="this is a danger notification" data-type="danger">Danger</button>
                <button class="a-btn a-dark notification-btn" data-text="this is a dark notification" data-type="dark">Dark</button>
            </div>

            <pre class="brush: js">

                $.atomNotification('Critical error has occured in system !', 'danger');

                // Allowed options and default values
                pluginOptions = {
                    clickToHide: true,              // False to disable hide on click, True to allow action
                    autoHide: true,                 // False to disable auto hide, True to auto detach after autoHideDelay
                    autoHideDelay: 7000,            // Auto Hide Time in ms
                    alignment: "bottom right",      // Notification position : ['top left', 'top right', 'bottom left', 'bottom right'] 
                    type: "success",                // Notification type : ['success', 'danger', 'info',  'warning', 'light', 'dark', 'primary', 'secondary'];
                    showAnimationTime: 450,         // Notification animation time
                    hideAnimationDuration: 200      // Notification remove time
                };
            </pre>
        </article>

        <h3>Notifications Positions</h3>
        <article>

            <div>
                <button class="a-btn a-primary notification-btn-pos" data-text="this is a primary notification" data-pos="top left">top left</button>
                <button class="a-btn a-primary notification-btn-pos" data-text="this is a primary notification" data-pos="top right">top right</button>
                <button class="a-btn a-primary notification-btn-pos" data-text="this is a primary notification" data-pos="bottom left">bottom left</button>
                <button class="a-btn a-primary notification-btn-pos" data-text="this is a primary notification" data-pos="bottom right">bottom right</button>
            </div>

        </article>

    </section>
@stop