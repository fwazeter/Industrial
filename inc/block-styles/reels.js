wp.domReady( () => {
    wp.blocks.registerBlockVariation(
        'core/columns', {
            name: 'columns-reel',
            title: 'Columns Reel',
            category: 'design',
            scope: [ 'block', 'transform' ],
            keywords: [ 'row', 'columns', 'group' ],
            attributes: {
                className: 'is-columns-reel',
            },
        },
    );
});
