<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <table width='100%' cellspacing='1' cellpadding="1" border='0'>
                    @foreach ($products as $product)
                    <tr>
                        <td width='200' height='150' align='center' bgcolor='#FFDDAA'><img src='upload/{{ $product->imgLink }}'></td>
                        <td bgcolor="#EDEDED">
                            <b>{{ $product->name }}</b>
                            <br>
                            {!! nl2br($product->summary) !!}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" height='1' bgcolor='#ffffff'></td>
                    </tr>
                    @endforeach
                </table>
                {!! $products->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>