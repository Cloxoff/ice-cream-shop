<div style="border: 1px solid #ddd; background: white; padding: 12px; width: 200px; text-align: center; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" style="width: 100%; height: 180px; object-fit: cover; border-radius: 6px;">
    <h3 style="font-size: 16px; margin: 10px 0 5px;">{{ $product->name }}</h3>
    <p style="margin: 4px 0; color: #666; font-size: 14px;">Color: {{ $product->color }}</p>
    <p style="margin: 6px 0; font-size: 16px; font-weight: bold; color: #ff4757;">Price: ${{ $product->price }}</p>
    <p style="margin: 4px 0; font-size: 12px; color: #888;">In Stock: {{ $product->stock }} units</p>
</div>