def FindMax(arr):
    n = len(arr)
    max = arr[0]
    for i in range(1, n):
        if arr[i] > max:
            max = arr[i]
    return max
def main():

    arr = [9,8,7,6,5,5,4,4,3,2,1,3,9]
    n = len(arr)

    print(arr)

    max = FindMax(arr)

    counts = [ 0 ] * (max + 1)

    for i in range(0, n):

        counts[ arr[i] ] += 1

    pos = 0

    for i in range(0, max+1):

        for j in range(0, counts[i]):

            arr[pos] = i

            pos +=1

    print(arr)

main()
