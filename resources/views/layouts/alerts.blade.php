

        @if (session('success'))
        $.toast({
            heading: 'Éxito',
            text: '{{ session('success') }}',
            showHideTransition: 'slide',
            icon: 'success',
            loaderBg: '#f96868',
            position: 'top-right'
        });
        @endif

        @if (session('error'))
        $.toast({
            heading: 'Error',
            text: '{{ session('error') }}',
            showHideTransition: 'slide',
            icon: 'error',
            loaderBg: '#f2a654',
            position: 'top-right'
        });
        @endif

        @if (session('warning'))
        $.toast({
            heading: 'Peligro',
            text: '{{ session('warning') }}',
            showHideTransition: 'slide',
            icon: 'warning',
            loaderBg: '#57c7d4',
            position: 'top-right'
        });
        @endif

