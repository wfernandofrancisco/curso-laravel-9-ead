@include('admin.includes.alerts')

@csrf
<div class="">
    <label class="block text-sm text-gray-600" for="name">Nome *</label>
    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="required" placeholder="Your Name" aria-label="Name" value="{{ $course->name ?? old('name') }}">
</div>
<div class="flex items-center mt-2">
    <input id="default-checkbox" type="checkbox"  name="available" value="1" @checked($course->available ?? false) class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
    <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900">Disponível</label>
</div>
<div class="mt-2">
    <label class="block text-sm text-gray-600" for="email">Imagem</label>
    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="image" name="image" type="file">
</div>
<div class="mt-2">
    <label class="block text-sm text-gray-600" for="description">Descrição</label>
    <textarea class="w-full px-5  py-2 text-gray-700 bg-gray-200 rounded" name="description" cols="30" rows="4" placeholder="Descrição">{{ $course->description ?? old('description') }}</textarea>
</div>
<div class="mt-6">
    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Enviar</button>
</div>